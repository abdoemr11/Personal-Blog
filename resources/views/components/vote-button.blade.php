@props(['type', 'comment_id'])
<button  @click="axios.post('/comment-vote-{{$type}}', {
                                comment_id: '{{$comment_id}}',
                                user_id: '{{auth()->user()?->id}}'
                              })
                              .then(function (response) {
                                if(response.data.count)
                                    console.log(count);
                                    count = response.data.count;
{{--                                    console.log(this.count);--}}
                                console.log(response)
                              })
                              .catch(function (error) {
                                console.log(error.response.data);
                              });">
    <i class="fa-solid fa-thumbs-{{$type == 1 ? 'up' : 'down'}}"></i>
</button>
