<template>
  <div class="flex items-center text-center text-danger">

    <button
      type="button"
      @click="clickLike"
      :class="(isLikedBy === true) ? 'text-white bg-danger border-none' : 'text-danger'"
      class="btn m-0 p-1 border border-danger rounded-full shadow-none focus:outline-none"
    >
        <span
        class="material-icons size"
        :class="(isLikedBy === true) ? 'text-white bg-danger border-none' : 'text-danger'"
        >thumb_up
        </span>
    </button>

    <span
    class="block ml-4 text-danger"
    >{{ countLikes }}</span>
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
    width: 40px;
    height: 40px;
    display: flex;
    align-items: center;
    justify-content: center;
}
.size {
  font-size: 22px;
}
</style>
