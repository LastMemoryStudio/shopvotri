<template>
    <div class="inputBox">
        <input v-model="inputValue" required="" type="text">
        <span> Nhập email </span>
    </div>
</template>

<script>
export default {
    props: {
        value: String,
    },
    data() {
        return {
            inputValue: this.value,
        };
    },
    watch: {
        inputValue(newValue) {
            this.$emit('input', newValue);
        },
        value(newValue) {
            this.inputValue = newValue;
        },
    },
};
</script>


<style>
.inputBox {
  position: relative;
}

.inputBox input {
  padding: 15px 20px;
  outline: none;
  background: transparent;
  border-radius: 5px;
  color: black;
  border: 1px solid rgb(239 68 68);;
  font-size: 1em;
}

.inputBox span {
  position: absolute;
  left: 0;
  padding: 15px 20px;
  pointer-events: none;
  font-size: 1em;
  transition: 0.4s cubic-bezier(0.05, 0.81, 0, 0.93);
  color: rgb(239 68 68);;
  letter-spacing: 0.1em;
}

.inputBox input:focus ~ span,
.inputBox input:valid ~ span {
  font-size: 0.7em;
  transform: translateX(14px) translateY(-7.5px);
  padding: 0 5px;
  border-radius: 2px;
  background: pink;
  letter-spacing: 0em;
  border: 1px solid rgb(239 68 68);;
}


</style>