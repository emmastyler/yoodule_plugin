<template>
    <!-- Image and text -->
    <nav class="navbar navbar-dark bg-default">
        <h6 id="description">
            A simple web page to populate a table using websocket for real-time
            response. click the button to initiate data population
            <p @click="isOpen = true" class="btn btn-success">Activate</p>
        </h6>
    </nav>

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
</template>

<script>
export default {
    mounted() {
        console.log("emma");
        window.Echo.channel("datarec").listen("newMessage", (e) => {
            console.log(e);
        });
    },
};
</script>
