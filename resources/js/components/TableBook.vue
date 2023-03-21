<template>
    <div class="card-body">
        <table class="table table-bordered">
            <thead class="table-dark text-center">
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="text-center">
                <tr v-for="book in books" :key="book.id">
                    <td>{{book.title}}</td>
                    <td>{{book.author}}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-bs-target="#modal" @click="showModal=true">
                            Reserve
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <modal v-if="showModal" v-model="showModal">
            <div id="modal" class="modal fade">
                <div class="modal-dialog modal-dialog-centered modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5">Modal title</h1>
                        </div>
                        <div class="modal-body">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </modal>
    </div>
</template>
<script>
import modal from './Modal.vue'
export default{
    data(){
        return{
            showModal:false
        }
    },
    components: {
        modal,
    },
    props: ["books"],
    methods: {
    },
}
</script>