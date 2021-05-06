<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>axios-dischi</title>
    <link rel="stylesheet" href="css/style.css">
    <!-- VUE -->
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <!-- JQUERY -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
    <script src="js/script.js" charset="utf-8"></script>
  </head>
  <body>
    <div id="app" class="container">
      <header>
        <h1>Elenco Dischi:</h1>
        <select v-model="selected" name="type" id="type">
          <option selected value>Generi</option>
          <option v-for="genre in genres" :value="genre">{{genre}}</option>
        </select>
      </header>

      <main>
        <ul>
          <li v-for="cd in filteredGenre()">
            <img :src="cd.poster" alt="">
            <h2>{{cd.title}}</h2>
            <h3>{{cd.author}}</h3>
            <p>{{cd.genre}}</p>
            <p>{{cd.year}}</p>
          </li>
        </ul>
      </main>
    </div>
  </body>
  </html>
