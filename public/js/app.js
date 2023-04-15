// Get a reference to the select element
const departure_s = document.getElementById('departure_s');
const arrival_s = document.getElementById('arrival_s');

// Fetch data from API and fill select options
fetch('https://countriesnow.space/api/v0.1/countries/cities', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    country: 'morocco'
  })
})
.then(response => response.json())
.then(data => {
    fill_select(data);
})
.catch(error => {
  console.error('Error:', error);
});

function fill_select(data) {
  data.data.forEach(number => {
    const option_departure_s = document.createElement('option');
    const option_arrival_s = document.createElement('option');

    option_departure_s.value = number;
    option_departure_s.textContent = number;
    departure_s.appendChild(option_departure_s);

    option_arrival_s.value = number;
    option_arrival_s.textContent = number;
    arrival_s.appendChild(option_arrival_s);
  });
}

// script login and register

const signInBtn = document.querySelector("#sign-in-btn");
const signUpBtn = document.querySelector("#sign-up-btn");
const container = document.querySelector("#containers");

signUpBtn.addEventListener("click", () => {
  container.classList.add("sign-up-mode");
});

signInBtn.addEventListener("click", () => {
  container.classList.remove("sign-up-mode");
});

// dropify
$('.dropify').dropify();

// crud javascript
var selectedRow = null

function onFormSubmit() {
    if (validate()) {
        var formData = readFormData();
        if (selectedRow == null)
            insertNewRecord(formData);
        else
            updateRecord(formData);
        resetForm();
    }
}

function readFormData() {
    var formData = {};
    formData["firstName"] = document.getElementById("firstName").value;
    formData["lastName"] = document.getElementById("lastName").value;
    formData["cin"] = document.getElementById("cin").value;
    formData["number"] = document.getElementById("number").value;
    return formData;
}

function insertNewRecord(data) {
    var table = document.getElementById("employeeList").getElementsByTagName('tbody')[0];
    var newRow = table.insertRow(table.length);
    cell1 = newRow.insertCell(0);
    cell1.innerHTML = data.firstName +" "+ data.lastName;
    cell2 = newRow.insertCell(1);
    cell2.innerHTML = data.cin;
    cell3 = newRow.insertCell(2);
    cell3.innerHTML = data.number;
    cell3 = newRow.insertCell(3);
    cell3.innerHTML = ` <div class="text-center">
                      <a class="btn btn-light rounded-pill btn-sm text-danger" 
                          onClick="onDelete(this)">
                          <i class="fa-solid fa-trash-can"></i>
                        </a>
                    </div>`;
}

function resetForm() {
    document.getElementById("firstName").value = "";
    document.getElementById("lastName").value = "";
    document.getElementById("cin").value = "";
    document.getElementById("number").value = "";
    selectedRow = null;
}

function onEdit(td) {
    selectedRow = td.parentElement.parentElement;
    document.getElementById("firstName").value = selectedRow.cells[0].innerHTML;
    document.getElementById("lastName").value = selectedRow.cells[1].innerHTML;
    document.getElementById("cin").value = selectedRow.cells[2].innerHTML;
    document.getElementById("number").value = selectedRow.cells[3].innerHTML;
}
function updateRecord(formData) {
    selectedRow.cells[0].innerHTML = formData.firstName;
    selectedRow.cells[1].innerHTML = formData.lastName;
    selectedRow.cells[2].innerHTML = formData.cin;
    selectedRow.cells[3].innerHTML = formData.number;
}

function onDelete(td) {
    if (confirm('Are you sure to delete this record ?')) {
        row = td.parentElement.parentElement.parentElement;
        document.getElementById("employeeList").deleteRow(row.rowIndex);
        resetForm();
    }
}
function validate() {
    isValid = true;
    if (document.getElementById("firstName").value == "") {
        isValid = false;
        document.getElementById("ValidationError").classList.remove("d-none");
    } else {
        isValid = true;
        if (!document.getElementById("ValidationError").classList.contains("d-none"))
            document.getElementById("ValidationError").classList.add("d-none");
    }
    return isValid;
}