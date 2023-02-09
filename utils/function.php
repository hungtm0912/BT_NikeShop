<?php
$user_id = -1;
if (isset($_SESSION['user_id']))
  $user_id = $_SESSION['user_id'];

$product_id = $_SESSION['product_id'];

// echo '<script type="text/javascript">alert("' . $product_id . '");</script>';

// get all posts from database
$product_query_result = $mysqli->query("SELECT * FROM products WHERE product_id=' . $product_id . '");

// Get all comments from database
$comments_query_result = $mysqli->query("SELECT users.avatar, users.user_id, comments.created_at, comments.body, comments.comment_id FROM comments join users on comments.user_id = users.user_id WHERE product_id=" . $product_id . " ORDER BY created_at DESC");
$comments = mysqli_fetch_all($comments_query_result, MYSQLI_ASSOC);

// If the user clicked submit on comment form...
if (isset($_POST['comment_posted'])) {

  global $mysqli;

  // grab the comment that was submitted through Ajax call
  $comment_text = $_POST['comment_text'];
  $product_id = $_POST['product_id'];

  // insert comment into database
  $sql = "INSERT INTO comments (product_id, user_id, body, created_at, updated_at) VALUES (" . $product_id . ", " . $user_id . ", '$comment_text', now(), null)";
  $result = $mysqli->query($sql);

  // Query same comment from database to send back to be displayed
  $inserted_id = $mysqli->insert_id;
  $res = $mysqli->query("SELECT * FROM comments join users on comments.user_id = users.user_id WHERE comment_id=$inserted_id");
  $inserted_comment = mysqli_fetch_assoc($res);


  // if insert was successful, get that same comment from the database and return it
  if ($result) {
    $comment = "<div class='comment clearfix'>
						<img src='./Admin_view/upload/user/" . $inserted_comment['avatar'] . "' alt='' class='profile_pic'>
						<div class='comment-details'>
							<span class='comment-name'>" . getUsernameById($inserted_comment['user_id']) . "</span>
							<span class='comment-date'>" . date('F j, Y ', strtotime($inserted_comment['created_at'])) . "</span>
							<p>" . $inserted_comment['body'] . "</p>
							<a class='reply-btn' href='#' data-id='" . $inserted_comment['comment_id'] . "'>reply</a>
						</div>
						<!-- reply form -->
						<form class='reply_form clearfix' id='comment_reply_form_" . $inserted_comment['comment_id'] . "' data-id='" . $inserted_comment['comment_id'] . "'>
							<textarea class='form-control' name='reply_text' id='reply_text' cols='30' rows='2'></textarea>
							<button class='btn btn-primary btn-xs pull-right submit-reply'>Submit reply</button>
						</form>
					</div>";


    $comment_info = array(
      'comment' => $comment,
      'comments_count' => getCommentsCountByPostId($product_id)
    );

    echo json_encode($comment_info);
    exit();
  } else {
    echo "error";
    exit();
  }
}

// If the user clicked submit on reply form...
if (isset($_POST['reply_posted'])) {

  global $mysqli;

  // grab the reply that was submitted through Ajax call
  $reply_text = $_POST['reply_text'];
  $comment_id = $_POST['comment_id'];

  // insert reply into database
  $sql = "INSERT INTO replies (user_id, comment_id, body, created_at, updated_at) VALUES (" . $user_id . ", $comment_id, '$reply_text', now(), null)";
  $result = $mysqli->query($sql);

  $inserted_id = $mysqli->insert_id;

  $res = $mysqli->query("SELECT * FROM replies WHERE reply_id=$inserted_id");
  $inserted_reply = mysqli_fetch_assoc($res);

  // if insert was successful, get that same reply from the database and return it
  if ($result) {
    $reply = "<div class='comment reply clearfix'>
						<img src='./Admin_view/upload/user/" . $_SESSION['avatar'] . "' alt='' class='profile_pic'>
						<div class='comment-details'>
							<span class='comment-name'>" . getUsernameById($inserted_reply['user_id']) . "</span>
							<span class='comment-date'>" . date('F j, Y ', strtotime($inserted_reply['created_at'])) . "</span>
							<p>" . $inserted_reply['body'] . "</p>
							<a class='reply-btn' href='#'>reply</a> &nbsp;&nbsp; <a class='edit-btn' href='#'>edit</a>
						</div>
						<!-- reply form -->
						<form action='index.php' class='reply_form' data-id='" . $inserted_reply['reply_id'] . "'>
							<textarea class='form-control' name='reply_text' id='reply_text' cols='30' rows='2'></textarea>
							<button class='btn btn-primary btn-xs pull-right submit-reply'>Submit reply</button>
						</form>
					</div>";
    echo $reply;
    exit();
  } else {
    echo "error";
    exit();
  }
}


// Receives a user id and returns the username
function getUsernameById($id)
{
  global $mysqli;
  $result = $mysqli->query("SELECT username FROM users WHERE user_id=" . $id . " LIMIT 1");

  // return the username
  return mysqli_fetch_assoc($result)['username'];
}

// Receives a comment id and returns the username
function getRepliesByCommentId($id)
{
  // echo '<script type="text/javascript">alert("' . $id . '");</script>';

  global $mysqli;

  $result = $mysqli->query("SELECT replies.created_at, replies.body, users.avatar, users.user_id, users.username FROM replies join users on users.user_id = replies.user_id WHERE replies.comment_id=$id");
  $replies = mysqli_fetch_all($result, MYSQLI_ASSOC);
  return $replies;
}

// Receives a post id and returns the total number of comments on that post
function getCommentsCountByPostId($product_id)
{
  global $mysqli;
  $result = $mysqli->query("SELECT COUNT(*) AS total FROM comments where product_id=$product_id");
  $data = mysqli_fetch_assoc($result);
  return $data['total'];
}