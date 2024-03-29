function toggleForm(formName) {
    var forms = document.getElementsByClassName("form");
    for (var i = 0; i < forms.length; i++) {
        forms[i].classList.remove("active");
    }
    document.getElementById(formName + "-form").classList.add("active");
    
    // 阻止表单默认提交行为
    event.preventDefault();
}
