import Vue from 'vue';
import './bootstrap';
import ArticleLike from './components/ArticleLike';
import ArticleMarkdown from './components/ArticleMarkdown';
import ArticleTagsInput from './components/ArticleTagsInput';
import ArticleToc from './components/ArticleToc';
import DarkmodeToggle from './components/DarkmodeToggle';
import FollowButton from './components/FollowButton';
import HomeArticleLike from './components/home/HomeArticleLike';

const app = new Vue({
  el: '#app',
  components: {
    ArticleLike,
    HomeArticleLike,
    ArticleMarkdown,
    ArticleTagsInput,
    FollowButton,
    ArticleToc,
    DarkmodeToggle
  }
})
