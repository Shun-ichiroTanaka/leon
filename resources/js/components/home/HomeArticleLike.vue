<template>
  <div class="flex items-center text-center text-gray">
    <button
      type="button"
      @click="clickLike"
      :class="(isLikedBy === true) ? 'text-white bg-danger' : 'text-gray'"
      class="btn m-0 p-1 rounded-full shadow-none focus:outline-none"
    >
        <span
        class="material-icons size text-xs"
        :class="(isLikedBy === true) ? 'text-white bg-danger' : 'text-gray'"
        >thumb_up
        </span>
    </button>
    <span
    class="inline-block ml-2 text-gray"
    >{{ countLikes }}
    </span>
  </div>
</template>

<script>
  export default {
    props: {
      initialIsLikedBy: {
        type: Boolean,
        default: false,
      },
      initialCountLikes: {
        type: Number,
        default: 0,
      },
      authorized: {
        type: Boolean,
        default: false,
      },
      endpoint: {
        type: String,
      },
    },
    data() {
      return {
        isLikedBy: this.initialIsLikedBy,
        countLikes: this.initialCountLikes,
        gotToLike: false,
      }
    },
    methods: {
      clickLike() {
        if (!this.authorized) {
          alert('いいね機能はログイン中のみ使用できます')
          return
        }

        this.isLikedBy
          ? this.unlike()
          : this.like()
      },
      async like() {
        const response = await axios.put(this.endpoint)

        this.isLikedBy = true
        this.countLikes = response.data.countLikes
        this.gotToLike = true
      },
      async unlike() {
        const response = await axios.delete(this.endpoint)

        this.isLikedBy = false
        this.countLikes = response.data.countLikes
        this.gotToLike = false
      },
    },
  }
</script>
<style lang="scss" scoped>
.btn {
    width: 30px;
    height: 30px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.size {
  font-size: 22px;
}
</style>
