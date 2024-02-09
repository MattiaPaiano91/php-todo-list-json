const { createApp } = Vue;

createApp({
  data() {
    return {
      todo: [],
      newTodo: "",
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
    newTodo() {
      axios
        .post(
          "http://localhost/php-todo-list-json/backend/create-todo.php",
          {
            todo: this.newTodo,
          },
          {
            headers: {
              "content-type": "multipart/form-data",
            },
          }
        )
        .then((res) => {
          console.log(res);

          if (res.data.code == 200) {
            this.todo.push({
              todo: this.newTodo,
              done: false,
            });

            this.newTodo = "";
          }
        });
    },
    removeToDo(i) {
      axios
        .post(
          "http://localhost/php-todo-list-json/backend/removeToDo.php",
          {
            index: i,
          },
          {
            headers: {
              "content-type": "multipart/form-data",
            },
          }
        )
        .then((res) => {
          console.log(res)
         this.todo.splice( i , 1 )
        });
    },
  },
}).mount("#app");
