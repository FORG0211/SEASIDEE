function showForm(formId){
    document.querySelectorAll(".form-box").forEach(form => form.classList.remove("active"));
    document.getElementById(formId).classList.add("active");
 }
 

document.getElementById("readMoreBtn").addEventListener("click", function () {//about
    alert("More details coming soon!");
});

