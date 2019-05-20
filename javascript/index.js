function cmtClickFunction() {
  var idUser = document.getElementById("idUser").value;
  var content = document.getElementById("content").value;
  if (idUser != 0){
    if(content != ""){
      document.getElementById("checkLogin").type = "submit";
      document.getElementById("commentForm").submit();
    } else alert("Hãy nhập bình luận");
  } else alert("Hãy đăng nhập để được bình luận.")
}