<template>
<div>
    <div v-for="msg in message">
        <div class="incoming_msg" v-if="msg.touser==fromId && msg.fromuser==toId">
            <div class="incoming_msg_img"> 
                <img :src="urlTo" style="width:50px; height:50px;"> 
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
        updated() {
            // whenever data changes and the component re-renders, this is called.
            this.$nextTick(() => this.scrollToEnd());
        },
        methods: {
            scrollToEnd: function () {
                // scroll to the start of the last message
                this.$el.scrollTop = this.$el.lastElementChild.offsetTop;
            }
        },
        props:['fromId','toId','urlTo']
    }
</script>