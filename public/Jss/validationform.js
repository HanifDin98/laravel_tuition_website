function validateForm1() {
    let name = document.forms["formpackA"]["name"].value;
    let gender = document.forms["formpackA"]["gender"].value;
    let sub1 = document.forms["formpackA"]["subjects1"].value;
    let sub2 = document.forms["formpackA"]["subjects2"].value;
    let sub3 = document.forms["formpackA"]["subjectz1"].value;
    // let sub4 = document.forms["formpackA"]["subjectz2"].value;
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (gender === "Choose...") {
      alert("Please choose your gender");
      return false;
    }
    if (sub1 === sub2) {
      alert("don't choose same subject");
      return false;
    }
    // if (sub3 === sub4) {
    //   alert("don't choose same subject");
    //   return false;
    // }
  }

  function validateForm2() {
    let name = document.forms["formpackA"]["name"].value;
    let gender = document.forms["formpackA"]["gender"].value;
    let sub1 = document.forms["formpackA"]["subjects1"].value;
    let sub2 = document.forms["formpackA"]["subjects2"].value;
    let sub3 = document.forms["formpackA"]["subjectz1"].value;
    let sub4 = document.forms["formpackA"]["subjectz2"].value;
    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (gender === "Choose...") {
      alert("Please choose your gender");
      return false;
    }
    if (sub1 === sub2) {
      alert("don't choose same subject");
      return false;
    }
    if (sub3 === sub4) {
      alert("don't choose same subject");
      return false;
    }
  }

  function validateForm3() {
    let name = document.forms["formpackA"]["name"].value;
    let gender = document.forms["formpackA"]["gender"].value;
    // let sub1 = document.forms["formpackA"]["subjects1"].value;
    // let sub2 = document.forms["formpackA"]["subjects2"].value;
    // let sub3 = document.forms["formpackA"]["subjects3"].value;
    // let sub4 = document.forms["formpackA"]["subjects4"].value;
    // let sub5 = document.forms["formpackA"]["subjectz1"].value;
    // let sub6 = document.forms["formpackA"]["subjectz2"].value;
    // let sub7 = document.forms["formpackA"]["subjectz3"].value;

    const sub = [];
    sub[1] = document.forms["formpackA"]["subjects1"].value;
    sub[2] = document.forms["formpackA"]["subjects2"].value;
    sub[3] = document.forms["formpackA"]["subjects3"].value;
    sub[4] = document.forms["formpackA"]["subjects4"].value;
    sub[5] = document.forms["formpackA"]["subjectz1"].value;
    sub[6] = document.forms["formpackA"]["subjectz2"].value;
    sub[7] = document.forms["formpackA"]["subjectz3"].value;

    if (name == "") {
      alert("Name must be filled out");
      return false;
    }
    if (gender === "Choose...") {
      alert("Please choose your gender");
      return false;
    }

    for(let i=1; i<8; i++){
      for(let j=7; j>i; j--){
        if(sub[i] === sub[j]){
          alert("don't choose same subject");
          return false;
        }
      }
    }
  }

  function validateSub() {
    let type = document.forms["formSub"]["type"].value;
    
    if (type === "Choose...") {
      alert("Please choose subject type");
      return false;
    }
  }

  function deleteNotify(){
    var txt;
    if (confirm("Are you sure to delete?!")) {
      return true;
    } else {
      return false;
    }
  }

  function submitNotify(){
    var txt;
    if (confirm("Are you sure to submit?!")) {
      return true;
    } else {
      return false;
    }
  }