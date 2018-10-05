  <template>
            <div class="container">
                <div class="row mb-2 mt-5">
                  <div class="col-md-8">
                        <div  v-for="post in posts" :key="post.id" class="card mb-4 animated fadeIn shadow">
                            <img class="card-img-top " :src="'/images/'+ post.image" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ post.title}}</h5>
                                <p class="card-text">{{ post.story }}</p>
                                <p class="lead mb-0"><router-link :to="{ name: 'posts' }"  >Continue reading...</router-link></p>
                                <p class="card-text"><small class="text-muted">Posted on {{ post.created }} by Ilias</small></p>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4 animated fadeIn">
                        <div class="jumbotron  p-md-4 rounded bg-white shadow-sm center">
                                    <img src="images/killua.gif" alt="killua" class="rounded-circle w-50 p-2">
                                    <h2 class="display-5">Ilias Boulahtari</h2>
                                    <p class="lead my-4">This is a blog about my internship and everyday experience.</p>       
                        </div>
                         <div class="jumbotron  p-md-4 rounded bg-white shadow-sm center">
                                  Categories
                        </div>
                </div>
                </div>
            </div>
    </template>
    <script>
        export default {
             data () {
                return {
                posts: []
                }
            },
            created () {
                axios
                .get('http://localhost:8000/api/posts')
                .then(response => (this.posts = response.data))
            }
        }
    </script>
    <style scoped>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
        }
        .post {
            min-height: 600px;
        }
        .center {
            text-align:center;
        }
    </style>