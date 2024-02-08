const { createApp } = Vue;

createApp({
  data() {
    return {
      todo: [],
    };
  },
  mounted() {
    axios
      .get("http://localhost/php-todo-list-json/backend/todo.php")
      .then((res) => {
        console.log(res);
        this.todo = res.data;
        console.log(this.todo);
      });
  },
  methods: {
    taskDone(i) {
      this.todo[i].done = !this.todo[i].done;
     
    },
  },
}).mount("#app");
