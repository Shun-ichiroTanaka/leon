<template>
<div class="mode-toggle" :class="darkDark">
    <div class="toggle slide">
      <input @click="modeToggle" id="c" type="checkbox" />
      <label for="c">
        <div class="card slide"></div>
      </label>
    </div>
</div>
</template>
<script>
export default {
  components: {
  },
  data() {
    return {
      darkMode: false,
    }
  },
  methods: {
      dark() {
          document.querySelector('body').classList.add('dark-mode')
          this.darkMode = true
          this.$emit('dark')
      },
      light() {
          document.querySelector('body').classList.remove('dark-mode')
          this.darkMode = false
          this.$emit('light')
      },
      modeToggle() {
          if(this.darkMode || document.querySelector('body').classList.contains('dark-mode')) {
              this.light()
          } else {
              this.dark()
          }
      },
  },
  computed: {
      darkDark() {
          return this.darkMode && 'darkmode-toggled'
      }
  }
}
</script>
<style lang="scss" scoped>
/* -------- Button Dark / Light ------- */
.toggle {
  display: flex;
  position: relative;
  width: 50px;
  height: 25px;
  background: #eee;
  border-radius: 999px;
  align-self: center;
  user-select: none;
  margin: 0 1rem;
  box-shadow: 0 15px 20px -10px #b3c9fa;
  transition: 0.2s ease-in;
}
.darkmode .toggle {
  box-shadow: 0 15px 20px -10px #181818;
  transition: 0.2s ease-in;
}

.toggle:after,
.toggle:before {
  flex: 1;
  text-align: center;
  line-height: 25px;
}


input {
  display: none;
}

label {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  perspective: 1000;
  cursor: pointer;
}
.card {
  position: relative;
  background: #AEB2B8;
  border-radius: 999px;
  transition: 0.4s;
  width: 50%;
  height: 25px;
  pointer-events: none;
}

input:checked + label .card {
  background: #AEB2B8;
  border-radius: 999px;
}

.slide .card {
  transform: translate(0);
}
.slide input:checked + label .card {
  transform: translateX(25px);
}
/* -------- End button Dark / Light ------- */


.cards {
  background: #fff;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 10px;
  min-width: 50px;
  height: 80px;
  transition: 0.2s ease !important;
  box-shadow: 0 15px 20px -10px #b3bdfa;
}
.darkmode .cards {
  box-shadow: 0 25px 15px -15px #242424;
}
.darkmode .cards:not(.not) {
  background: #222;
  transition: 0.3s ease-in;
  box-shadow: 0 25px 15px -15px #242424;
}

.cards span {
  padding: 0 1rem;
  transition: 0.4s ease-in;
}

.darkmode .cards:not(.not) span {
  color: white;
}

@media (max-width: 600px) {
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (max-width: 380px) {
  .grid {
    grid-template-columns: repeat(1, 1fr);
  }
}

</style>
