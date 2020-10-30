import MyNameClass from "./components/classes/MyNameClass.js";
Vue.prototype.$MyNameClass= new MyNameClass('Satish', 'B');
this.$MyNameClass.getFullName();