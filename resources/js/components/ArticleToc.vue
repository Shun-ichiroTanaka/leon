<template>
  <div class="w-full h-full">
    <p class="mt-8 text-center text-dark_two font-bold cursor-default">目次</p>
    <!-- 目次を作成する先 -->
    <div id="toc" data-toc></div>
  </div>
</template>
<script>
export default {
  mounted() {
    var tableOfContents = function (content, target, options) {

        //
        // Variables
        //

        // Get content
        var contentWrap = document.querySelector(content);
        var toc = document.querySelector(target);
        if (!contentWrap || !toc) return;

        // Settings & Defaults
        var defaults = {
            levels: 'h1, h2, h3, h4, h5, h6',
            heading: 'Table of Contents',
            headingLevel: 'h1',
            listType: 'ul'
        };
        var settings = {};

        // Placeholder for headings
        var headings;


        //
        // Methods
        //

        /**
         * Merge user options into defaults
         * @param  {Object} obj The user options
         */
        var merge = function (obj) {
            for (var key in defaults) {
                if (Object.prototype.hasOwnProperty.call(defaults, key)) {
                    settings[key] = Object.prototype.hasOwnProperty.call(obj, key) ? obj[key] : defaults[key];
                }
            }
        };

        /**
         * 見出しが存在しない場合は、見出しのIDを作成
         * @param  {Node} heading The heading element
         */
        var createID = function (heading) {
            if (heading.id.length) return;
            heading.id = 'toc_' + heading.textContent.replace(/[^A-Za-z0-9]/g, '-');
        };

        /**
         * HTMLを取得して、リストを特定のレベル数でインデント
         * @param  {Integer} count The number of times to indent the list
         * @return {String}        The HTML
         */
        var getIndent = function (count) {
            var html = '';
            for (var i = 0; i < count; i++) {
                html += '<' + settings.listType + '>';
            }
            return html;
        };

        /**
         * HTMLを取得して、インデントされたリストを特定のレベル数で閉じる
         * @param  {Integer} count The number of times to "outdent" the list
         * @return {String}        The HTML
         */
        var getOutdent = function (count) {
            var html = '';
            for (var i = 0; i < count; i++) {
                html += '</' + settings.listType + '></li>';
            }
            return html;
        };

        /**
         * HTML文字列を取得して、見出しの新しいリストを開始
         * @param  {Integer} diff  The number of levels in or out from the current level the list is
         * @param  {Integer} index The index of the heading in the "headings" NodeList
         * @return {String}        The HTML
         */
        var getStartingHTML = function (diff, index) {

            // インデントする場合
            if (diff > 0) {
                return getIndent(diff);
            }

            // アウトデントの場合
            if (diff < 0) {
                return getOutdent(Math.abs(diff));
            }

            // それが最初のアイテムではなく、違いがない場合
            if (index && !diff) {
                return '</li>';
            }

            return '';

        };

        /**
         * 目次をDOMに挿入します
         */
        var injectTOC = function () {

            // 現在の見出しレベルを追跡
            var level = headings[0].tagName.slice(1);
            var startingLevel = level;

            // 見出しの数をキャッシュ
            var len = headings.length - 1;

            // HTMLをDOMに挿入
            toc.innerHTML =
                '<' + settings.headingLevel + '>' + settings.heading + '</' + settings.headingLevel + '>' +
                '<' + settings.listType + '>' +
                    Array.prototype.map.call(headings, function (heading, index) {

                        // Add an ID if one is missing
                        createID(heading);

                        // Check the heading level vs. the current list
                        var currentLevel = heading.tagName.slice(1);
                        var levelDifference = currentLevel - level;
                        level = currentLevel;
                        var html = getStartingHTML(levelDifference, index);

                        // Generate the HTML
                        html +=
                            '<li>' +
                                '<a href="#' + heading.id + '">' +
                                    heading.innerHTML.trim() +
                                '</a>';

                        // If the last item, close it all out
                        if (index === len) {
                            html += getOutdent(Math.abs(startingLevel - currentLevel));
                        }

                        return html;

                    }).join('') +
                '</' + settings.listType + '>';
        };

        /**
         * 処理を初期化メソッド
         */
        var init = function () {

            // ユーザー設定をデフォルトにマージ
            merge(options || {});

            // 見出しを取得する
            // 何も見つからない場合はリストをレンダリングしない
            headings = contentWrap.querySelectorAll(settings.levels);
            if (!headings.length) return;

            // 目次を挿入します
            injectTOC();

        };


        //
        // 処理を初期化
        //
        init();

    };


    tableOfContents('[data-content]', '[data-toc]', {
        heading: '目次', // Change the headings
        listType: 'ol', // Change the list type
        // levels: 'h2, h3' // Change the levels used
    });
  }
}
</script>
<style lang="scss">
/* 子の目次 */
#toc {
    color: #AEB2B8;
    li {
        padding: 10px 0;
    }
    h1 {
        display: none;
    }
    ol > li > ol  {
	    margin-left: 15px;
    }
}
</style>
