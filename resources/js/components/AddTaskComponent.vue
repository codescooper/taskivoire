<template>
    <div>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary my-3" data-toggle="modal" data-target="#exampleModal">
            Ajouter une tache
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter une tache</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="name">Nom de la tache</label>
                        <textarea name="name" id="name" rows="4" class="form-control" v-model="name"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button class="btn btn-success" @click="taskStore">Creer ma tache</button>
            </div>
            </div>
        </div>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            name: ''
        }
    },

    methods: {
        taskStore() {
            axios.post('http://127.0.0.1:8000/taskStore', {
                name: this.name,
            })
                .then(response => this.$emit('task-added', response))
                .catch(error => console.log('une erreur '+error));
        }
    }
}
</script>