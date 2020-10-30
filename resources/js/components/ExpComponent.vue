<template>
    <div class="container">
        <h2>This is my EXP component</h2>
                <p>Foo:{{ foo }}</p>
                <p>Name:{{ name }}</p>
                <p>AnotherName:{{ AnotherName }}</p>
                <p>Score:{{ Score }}</p>
                <input type="text" v-on:input="changeText">
                <h1>{{ text }}</h1>
                <h1>{{ date }}</h1>
                <h2 v-html="htmlLink"></h2>
        <!-- this will update `foo`! -->
        <button v-on:click="foo = 'baz'">Change it</button>
    </div>
</template>

<script>

import MyNameClass from "./classes/MyNameClass.js";

var obj = {
    foo: 'bar'
}

class Car {
  constructor(name, year) {
    this.name = name;
    this.year = year;
    this.count = 0;
  }                                         
}

const user1 = {
    name:"Phill",
    score:4,
    increment: function(){
        user1.score++;
    }
}

user1.increment()
let date1= new Date(Date.now());

export default {
    data: function(){
        user1.increment();
        return {
            // myself: this.$MyNameClass.getFullName(),
            foo:'bar',
            name: new Car('Satish','McQueen'),
            AnotherName: new MyNameClass('Satish', 'B'),
            Score: user1.score,
            text: 'Default Text',
            date: date1.toUTCString(),
            htmlLink: '<a href="http://google.com">Google</a>'
        }
    },

    mounted() {
      
    },

    methods:{
        changeText : function(event){
            this.text = event.target.value;
        }
    },
}
</script>