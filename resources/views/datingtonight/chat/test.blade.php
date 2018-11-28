
from id:{{$fromID}}
to id:{{$toID}}

@foreach($message as $msg)
          	    <?php
          		$sendedContent;
          		$receivedContent;
          		if($msg->fromuser==$fromID && $msg->touser==$toID)
          		{
          			echo $sendedContent=$msg->content;
          		}
          		echo "<br>";
          		if($msg->fromuser==$toID && $msg->touser==$fromID)
          		{
          			$receivedContent=$msg->content;
          			echo $receivedContent=$msg->content;
          		}
          		?>
@endforeach