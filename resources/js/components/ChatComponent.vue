<template>
<div>
    <div v-for="msg in message">
        <div class="incoming_msg" v-if="msg.touser==fromId && msg.fromuser==toId">
            <div class="incoming_msg_img"> 
                <img :src="urlTo"> 
            </div>
            <div class="received_msg">
                <div class="received_withd_msg">
                    <p>{{msg.content}}</p>
                </div>
            </div>
        </div>

        <div class="outgoing_msg" v-if="msg.fromuser==fromId && msg.touser==toId">
            <div class="sent_msg">
                <p>{{msg.content}}</p>
            </div>
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
        },
        props:['fromId','toId','urlTo']
    }
</script>