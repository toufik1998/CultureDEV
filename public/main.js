document.querySelector("#addButton").addEventListener("click", ()=>{
    document.querySelector("#task-save-btn").style.display = 'block';
    document.querySelector("#task-update-btn").style.display = 'none';
});

function deletePost(deleteType){
    

    if(deleteType == 1){
        if(confirm('Do you want To delete this Category : ') == true){
            document.querySelector("#buttonDeleteCategory").click();
            console.log("cattt");
        }

    }else{
        if(confirm('Do you want To delete this Post : ') == true){
            document.querySelector("#buttonDelete").click();
        }
    }
}

// function editPost(title,category,content,id){
//     let postTitle=document.querySelector("#post-title");
//     let postStatus=document.querySelector("#post-status");
//     let postContent = document.querySelector("#post-content");
    
//     postTitle.value=title;
//     postStatus.value=category;
//     postContent.value=content;
//     document.querySelector("#task-save-btn").style.display = 'none';
//     document.querySelector("#task-update-btn").style.display = 'block';
//     document.querySelector("#product-id").value = id;
     
// 	// console.log(id);
// }

function editTask(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../../app/controller/post.contr.php',
        data: {openTask : id},
        success: function (obj) {
           let currentData = JSON.parse(obj);
           console.log(currentData[0]);
            document.getElementById('post-title').value                                      = currentData[0].title;
            document.getElementById('post-status').value                                     = currentData[0].category;
            document.getElementById('post-content').value                                    = currentData[0].content;
            
        }
    });

}

function editCategory(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../../app/controller/category.contr.php',
        data: {openCategory : id},
        success: function (obj) {
           let currentData = JSON.parse(obj);
           console.log(currentData[0]);
            document.getElementById('category-name').value                                      = currentData[0].category_name;
            // document.getElementById('post-status').value                                     = currentData[0].category;
            // document.getElementById('post-content').value                                    = currentData[0].content;
            
        }
    });

}


