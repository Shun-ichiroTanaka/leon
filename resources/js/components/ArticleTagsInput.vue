<template>
  <div class="w-full">
    <input
      type="hidden"
      name="tags"
      :value="tagsJson"
    >
    <vue-tags-input
      v-model="tag"
      :tags="tags"
      placeholder="タグを5個まで入力できます"
      :add-on-key="[13, 32]"
      :autocomplete-items="filteredItems"
      @tags-changed="newTags => tags = newTags"
      class="w-full bg-dark_two my-2"
    />
  </div>
</template>

<script>
  import VueTagsInput from '@johmun/vue-tags-input';

  export default {
    components: {
      VueTagsInput,
    },
    props: {
      initialTags: {
        type: Array,
        default: [],
      },
      autocompleteItems: {
        type: Array,
        default: [],
      },
    },
    data() {
      return {
        tag: '',
        tags: this.initialTags,
      };
    },
    computed: {
      filteredItems() {
        return this.autocompleteItems.filter(i => {
          return i.text.toLowerCase().indexOf(this.tag.toLowerCase()) !== -1;
        });
      },
      tagsJson() {
        return JSON.stringify(this.tags)
      },
    },
  };
</script>
<style lang="scss">
  .vue-tags-input {
    max-width: 100% !important;
  }
  .ti-input {
    border: none !important;
  }
  .ti-new-tag-input {
      @apply bg-dark_two;
  }
  .ti-deletion-mark {
    background-color: #e3342f !important;
    color: white !important;
    border: none !important;
  }
  .vue-tags-input .ti-tag {
    background: transparent;
    border: 1px solid #c4c6cb;
    color: #c4c6cb;
    margin-right: 4px;
    border-radius: .5rem !important;
    font-size: 13px;
  }
  .vue-tags-input .ti-tag::before {
    content: "#";
  }
</style>
