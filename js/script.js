function init() {
  new Vue ({
    el: "#app",
    data: {
      items: [],
      selected: "",
      genres:[],
    },
    methods: {
      getGenre: function (){
        for (var i = 0; i < this.items.length; i++) {
          const item = this.items[i];
          const genre = item.genre;
          if (!this.genres.includes(genre)) {
            this.genres.push(genre);
          }
        }
      },

      filteredGenre: function() {
        var test = this.items.filter( type =>  type.genre.includes(this.selected));
        return test;
      },
    },

    mounted () {
      axios.get('js/data.php')
      .then(data => {
        this.items = data.data;
        console.log(data);
        console.log(this.items);
        this.getGenre();
      })
      .catch(e => {
        console.log(e);
      })
    }
  });
}

$(document).ready(init);
