<template>
    <div class="incoming_msg">
        <div class="incoming_msg_img"> 
            <img :src="message"> 
        </div>
        <div class="received_msg">
            <div class="received_withd_msg">
                <p>Hello</p>
            </div>
        </div>
    </div>
</template>

<script>
    import firebase from 'firebase';

    export default {
        data () {
            return {
                message: []
            }
        },
        mounted() {
            firebase.initializeApp(window.firebaseConfig);
            firebase.database().ref('message/').on('value', (snapshot) => {
                this.message = snapshot.val();
            });
        }
    }
</script>