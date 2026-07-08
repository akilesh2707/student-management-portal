// ==========================================
// Attendance Management System
// Part 1 - Initialization & Rendering
// DSA Used: Array
// ==========================================

// ---------- DOM ELEMENTS ----------

const tableBody = document.getElementById("studentTable");

const totalStudents = document.getElementById("totalStudents");
const presentCount = document.getElementById("presentCount");
const absentCount = document.getElementById("absentCount");
const attendancePercent = document.getElementById("attendancePercent");

const summaryTotal = document.getElementById("summaryTotal");
const summaryPresent = document.getElementById("summaryPresent");
const summaryAbsent = document.getElementById("summaryAbsent");
const summaryPercentage = document.getElementById("summaryPercentage");

const searchInput = document.getElementById("searchInput");
const filterAttendance = document.getElementById("filterAttendance");

const sortRoll = document.getElementById("sortRoll");
const sortName = document.getElementById("sortName");
const sortAttendance = document.getElementById("sortAttendance");

const undoBtn = document.getElementById("undoBtn");

const historyList = document.getElementById("historyList");
const themeBtn = document.getElementById("themeBtn");

// ==========================================
// DSA VARIABLES
// ==========================================

// Stack
let attendanceStack = [];

// Queue
let attendanceQueue = [];

// Hash Map
let studentMap = new Map();

// Build Hash Map
students.forEach(student=>{
    studentMap.set(student.rollNo,student);
});

// ==========================================
// LOCAL STORAGE
// ==========================================

function loadAttendance(){

    let saved = localStorage.getItem("attendanceData");

    if(saved){

        students = JSON.parse(saved);

        studentMap.clear();

        students.forEach(student=>{

            studentMap.set(student.rollNo,student);

        });

    }

}

function saveAttendance(){

    localStorage.setItem(
        "attendanceData",
        JSON.stringify(students)
    );

}

// ==========================================
// DASHBOARD
// ==========================================

function updateDashboard(){

    let total = students.length;

    let present = 0;
    let absent = 0;

    students.forEach(student=>{

        if(student.status==="Present")
            present++;

        else if(student.status==="Absent")
            absent++;

    });

    let percentage = 0;

    if(total>0){

        percentage=((present/total)*100).toFixed(1);

    }

    totalStudents.textContent=total;
    presentCount.textContent=present;
    absentCount.textContent=absent;
    attendancePercent.textContent=percentage+"%";

    summaryTotal.textContent=total;
    summaryPresent.textContent=present;
    summaryAbsent.textContent=absent;
    summaryPercentage.textContent=percentage+"%";

}

// ==========================================
// HISTORY
// ==========================================

function updateHistory(){

    historyList.innerHTML="";

    attendanceQueue.forEach(item=>{

        let li=document.createElement("li");

        li.textContent=item;

        historyList.appendChild(li);

    });

}

// ==========================================
// TABLE
// ==========================================

function displayStudents(list=students){

    tableBody.innerHTML="";

    list.forEach(student=>{

        let badgeClass="notMarked";

        if(student.status==="Present")
            badgeClass="present";

        if(student.status==="Absent")
            badgeClass="absent";

        let row=`

<tr>

<td>${student.rollNo}</td>

<td>${student.name}</td>

<td>${student.department}</td>

<td>

<span class="status ${badgeClass}">
${student.status}
</span>

</td>

<td>

<button
class="action-btn present-btn"
onclick="markAttendance(${student.rollNo},'Present')">

Present

</button>

<button
class="action-btn absent-btn"
onclick="markAttendance(${student.rollNo},'Absent')">

Absent

</button>

</td>

</tr>

`;

        tableBody.innerHTML+=row;

    });

}

// ==========================================
// MARK ATTENDANCE
// ==========================================

function markAttendance(rollNo,status){

    let student=studentMap.get(rollNo);

    if(student==null)
        return;

    // Push old value into Stack
    attendanceStack.push({

        rollNo:student.rollNo,

        oldStatus:student.status

    });

    // Update attendance
    student.status=status;

    // Queue history
    attendanceQueue.push(

        student.rollNo+
        " - "+
        student.name+
        " : "+
        status

    );

    // Queue size = 10

    if(attendanceQueue.length>10){

        attendanceQueue.shift();

    }

    saveAttendance();

    displayStudents();

    updateDashboard();

    updateHistory();

}

// ==========================================
// LOAD PAGE
// ==========================================

loadAttendance();

displayStudents();

updateDashboard();

updateHistory();
// ==========================================
// PART 2
// Search, Sorting & Filtering
// DSA Concepts:
// Linear Search
// Bubble Sort
// Binary Search
// ==========================================

// Stores the currently displayed students
let currentStudents = [...students];

// ==========================================
// LINEAR SEARCH
// ==========================================

function linearSearch(keyword){

    keyword = keyword.toLowerCase().trim();

    if(keyword===""){

        currentStudents=[...students];

        displayStudents(currentStudents);

        return;

    }

    let result=[];

    for(let i=0;i<students.length;i++){

        if(

            students[i].name.toLowerCase().includes(keyword)

            ||

            students[i].rollNo.toString().includes(keyword)

        ){

            result.push(students[i]);

        }

    }

    currentStudents=result;

    displayStudents(currentStudents);

}

// ==========================================
// BUBBLE SORT
// Roll Number
// ==========================================

function bubbleSortRoll(){

    for(let i=0;i<currentStudents.length-1;i++){

        for(let j=0;j<currentStudents.length-i-1;j++){

            if(currentStudents[j].rollNo >

               currentStudents[j+1].rollNo){

                let temp=currentStudents[j];

                currentStudents[j]=currentStudents[j+1];

                currentStudents[j+1]=temp;

            }

        }

    }

    displayStudents(currentStudents);

}

// ==========================================
// BUBBLE SORT
// Name
// ==========================================

function bubbleSortName(){

    for(let i=0;i<currentStudents.length-1;i++){

        for(let j=0;j<currentStudents.length-i-1;j++){

            if(

            currentStudents[j].name.toLowerCase()

            >

            currentStudents[j+1].name.toLowerCase()

            ){

                let temp=currentStudents[j];

                currentStudents[j]=currentStudents[j+1];

                currentStudents[j+1]=temp;

            }

        }

    }

    displayStudents(currentStudents);

}

// ==========================================
// SORT BY ATTENDANCE
// ==========================================

function sortAttendanceStatus(){

    currentStudents.sort(function(a,b){

        return a.status.localeCompare(b.status);

    });

    displayStudents(currentStudents);

}

// ==========================================
// FILTER
// ==========================================

function filterStudents(){

    let value = filterAttendance.value;

    if(value==="all"){

        currentStudents=[...students];

    }

    else if(value==="present"){

        currentStudents=students.filter(student=>{

            return student.status==="Present";

        });

    }

    else if(value==="absent"){

        currentStudents=students.filter(student=>{

            return student.status==="Absent";

        });

    }

    else{

        currentStudents=students.filter(student=>{

            return student.status==="Not Marked";

        });

    }

    displayStudents(currentStudents);

}

// ==========================================
// BINARY SEARCH
// Roll Number
// ==========================================

function binarySearch(roll){

    // Copy array

    let arr=[...students];

    // Bubble sort

    for(let i=0;i<arr.length-1;i++){

        for(let j=0;j<arr.length-i-1;j++){

            if(arr[j].rollNo>arr[j+1].rollNo){

                let temp=arr[j];

                arr[j]=arr[j+1];

                arr[j+1]=temp;

            }

        }

    }

    let left=0;

    let right=arr.length-1;

    while(left<=right){

        let mid=Math.floor((left+right)/2);

        if(arr[mid].rollNo==roll){

            return arr[mid];

        }

        if(arr[mid].rollNo<roll){

            left=mid+1;

        }

        else{

            right=mid-1;

        }

    }

    return null;

}

// ==========================================
// EVENT LISTENERS
// ==========================================

searchInput.addEventListener("keyup",function(){

    linearSearch(this.value);

});

sortRoll.addEventListener("click",function(){

    bubbleSortRoll();

});

sortName.addEventListener("click",function(){

    bubbleSortName();

});

sortAttendance.addEventListener("click",function(){

    sortAttendanceStatus();

});

filterAttendance.addEventListener("change",function(){

    filterStudents();

});