function showOutput() {
    let name = document.getElementById("name").value;
    let gender = document.getElementById("gender").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;

    document.getElementById("output").innerHTML = `
        <h3>Submitted Details</h3>
        <p><b>Name:</b> ${name}</p>
        <p><b>Gender:</b> ${gender}</p>
        <p><b>Phone:</b> ${phone}</p>
        <p><b>Email:</b> ${email}</p>
    `;
}
