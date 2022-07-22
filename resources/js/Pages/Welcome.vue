<template>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-default">
        <h6 id="description">
            A simple web page to populate a table using websocket for real-time
            response. click the button to initiate data population
            <p @click="isOpen = true" class="btn btn-success">Activate</p>
        </h6>
    </nav>

    <Modal :open="isOpen" @close="isOpen = !isOpen">
        <form action="#">
            <div class="form-group">
                <label for="exampleInputFirstName">First Name</label>
                <input
                    v-model="message"
                    type="text"
                    class="form-control"
                    id="exampleInputFirstName"
                    aria-describedby="emailHelp"
                    placeholder="Enter First Name"
                />
            </div>
            <br />
            <div class="form-group">
                <label for="exampleInputLastName">Last Name</label>
                <input
                    v-model="message"
                    type="text"
                    class="form-control"
                    id="exampleInputLastName"
                    aria-describedby="emailHelp"
                    placeholder="Enter Last Name"
                />
            </div>
            <br />
            <div class="form-group">
                <button type="submit" class="btn btn success">Submit</button>
            </div>
        </form>
    </Modal>

    <table
        class="table table-responsive mx-auto mt-2 table-bordered"
        style="width: 50%"
    >
        <thead>
            <tr>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Description</th>
                <th scope="col">token</th>
            </tr>
        </thead>
        <tbody v-for="item in items" :key="item">
            <tr>
                <td>{{ item.first_name }}</td>
                <td>{{ item.last_name }}</td>
                <td>{{ item.age }}</td>
                <td>{{ item.token }}</td>
            </tr>
        </tbody>
    </table>
</template>

<script>
$(document).ready(function () {
    $("form").on("submit", function (event) {
        event.preventDefault();
        $.ajaxSetup({
            headers: {
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
            },
        });
        $.ajax({
            url: "/populate",
            type: "POST",
            dataType: "json",
            data: {
                url: "http://127.0.0.1:8000/",
                css: "id_description",
            },
        });
    });
});
import Modal from "../components/Modal.vue";
import { ref } from "vue";
import Echo from "laravel-echo";
var csrf_token = $('meta[name="_token"]').attr("content");

export default {
    components: { Modal },
    data() {
        return {
            items: [
                { age: 40, first_name: "Dickerson", last_name: "Macdonald" },
                { age: 21, first_name: "Larsen", last_name: "Shaw" },
                { age: 89, first_name: "Geneva", last_name: "Wilson" },
                { age: 38, first_name: "Jami", last_name: "Carney" },
                { token: csrf_token },
            ],
        };
    },

    setup() {
        const isOpen = ref(false);

        return { isOpen };
    },
};
</script>
