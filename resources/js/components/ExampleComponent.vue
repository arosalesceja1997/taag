<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card uper">
                    <div class="card-header">Add Games Data</div>
                    <div class="card-body">

                            <div class="form-group">
                                <label for="country_name">Title:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="title"
                                />
                            </div>

                            <div class="form-group">
                                <label for="country_name">Author:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="author"
                                />
                            </div>

                            <div class="form-group">
                                <label for="country_name">Edition:</label>
                                <input
                                    type="text"
                                    class="form-control"
                                    name="edition"
                                />
                            </div>
                            <br>
                            <button v-on:click="counter += 1" class="btn btn-primary">Add</button>

                              <p>Se ha hecho clic en el botón de arriba {{ counter }} veces.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data: {
        counter: 0
    }
};
</script>
