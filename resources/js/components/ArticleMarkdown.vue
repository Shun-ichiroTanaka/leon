<!-- 投稿本文 -->
<template>
<div class="h-full">
    <textarea
        name="body"
        required
        class="hidden"
        v-model="body"
        >
    </textarea>

    <mavon-editor
            type="textarea"
            :value="markdownBody"
            v-model="body"
            :toolbars="markdownOption"
            :language="'ja'"
            :ishljs="true"
            placeholder="フロントエンド開発のチュートリアルを共有しよう"
    >
    </mavon-editor>
</div>


</template>
<script>
import Vue from "vue";
import mavonEditor from "mavon-editor";
import "mavon-editor/dist/css/index.css";
Vue.use(mavonEditor);

export default {
    props: {
        // bladeから値を受け取る
        oldBody: {
            type: String
        },
    },
    data() {
        return {
            // 値をセットする(v-modelに値が入る)
            body: this.oldBody,
            markdownOption: {
                bold: true,
                italic: true,
                header: true,
                quote: true,
                ol: true,
                ul: true,
                link: true,
                imagelink: true,
                code: true,
                fullscreen: true,
                readmodel: true,
                htmlcode: true,
                help: true,
                undo: true,
                redo: true,
                trash: true,
                navigation: true,
                subfield: true,
                preview: false,
            },
        };
    },
    computed: {
      markdownBody() {
        return this.body
      },
    },
};
</script>
<style lang="scss">
.markdown-body {
    height: 100%;
}
.v-note-wrapper {
    border: none !important;
    box-shadow: none !important;
}
.v-note-panel {
    height: calc(100vh - 300px) !important;
}
</style>
