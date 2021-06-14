const commentBtn = document.querySelectorAll('.comment-btn');
let btnArr = Array.from(commentBtn);

window.onload = () => {
    btnArr.forEach((btn) => {
        btn.disabled = true;
    });
}
function enableDisable(comment) {
    //Reference the Button.

    //Verify the TextBox value.
    if (comment.value.trim() !== "") {
        btnArr.forEach((btn) => {
            btn.disabled = false;
        });
    } else {
        btnArr.forEach((btn) => {
            btn.disabled = true;
        });
    }
};