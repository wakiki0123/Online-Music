// function addPlayList(){
//       alert("click me");
//       // if(idUser != 0){
//       //  window.location = 'playList/addIntoPlayList.php?idUser' + idUser;
//       // } else alert("Xin đăng nhập để thực hiện thao tác này");
//     }
function cmtClickFunction() {
  var idUser = document.getElementById("idUser").value;
  var content = document.getElementById("content").value;
  if (idUser != 0){
    if(content != ""){
      document.getElementById("submitCommentClick").type = "submit";
      document.getElementById("commentForm").submit();
    } else alert("Hãy nhập bình luận");
  } else alert("Hãy đăng nhập để được bình luận.")
}

function funcaddPlayList() {
  var idUser = document.getElementById("idUser").value;
  var check = document.getElementById("checkPlayList").value;
  if (idUser != 0){
    if(check == 0){    
      document.getElementById("addPlayList").type = "submit";
    	document.getElementById("addPlayListForm").submit();
    } else alert("Bài hát đã có trong Play List");
  } else alert("Xin hãy đăng nhập để thực hiện tao tác này.")
}