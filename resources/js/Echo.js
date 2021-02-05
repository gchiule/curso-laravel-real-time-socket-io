import Vue from 'vue'
import Bus from './bus'

window.Echo.channel('curso_laravel_socket_io_database_post-created')
            .listen('PostCreated', (e) => {
                Bus.$emit('post.created', e.post)

                Vue.$vToastify.success(`Título do post ${e.post.name}`, 'Novo Post')
            })