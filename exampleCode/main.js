const db = firebase.firestore();

//document.querySelector("#task-form");
const taskForm = document.getElementById('task-form');
const tasksContainer = document.getElementById('tasks-container');
let editEstatus = false;
let id = '';

const saveTask = (title, description)=>{
    db.collection('tasks').doc().set({
        //title: title,
        title,
        //description:description
        description
    });
}

//const getTask = ()=>db.collection('tasks').get();

const onGetTask = (callback) => db.collection('tasks').onSnapshot(callback);

const deleteTask = id => db.collection('tasks').doc(id).delete();
const getTask = (id) => db.collection('tasks').doc(id).get();

const updateTask = (id, updateTask)=> db.collection('tasks').doc(id).update(updateTask);

window.addEventListener('DOMContentLoaded', async(e) =>{
    //const tasks = await getTask();
    //const querySnapshot = await getTask();
    onGetTask((querySnapshot)=>{
        tasksContainer.innerHTML ='';
        querySnapshot.forEach(doc=>{
            const task = doc.data();
            tasksContainer.innerHTML += `<div class="card card-body mt-2 border-primary">
            <h3 class="h5">${task.title}</h3>
            <p>${task.description}</p>
            <div>
                <button class="btn btn-primary btn-delete" data-id="${doc.id}">
                    Delete
                </button>
                <button class="btn btn-secondary btn-edit" data-id="${doc.id}">
                    Edit
                </button>
            </div>
            </div>`;
            const btnsDelete=document.querySelectorAll('.btn-delete');
            btnsDelete.forEach(btn =>{
                btn.addEventListener('click',async (e)=>{
                    //console.log(e.target.dataset.id)
                    await deleteTask(e.target.dataset.id)
                })
            })  
            const btnsEdit=document.querySelectorAll('.btn-edit');
            btnsEdit.forEach(btn =>{
                btn.addEventListener('click',async (e)=>{
                    //console.log(e.target.dataset.id)
                    const doc = await getTask(e.target.dataset.id);
                    const task=doc.data();
                    editEstatus=true;
                    id=e.target.dataset.id;
                    taskForm['task-title'].value=task.title;
                    taskForm['task-description'].value=task.description;
                    taskForm['btn-task-form'].innerText="Update";
                    taskForm['task-title'].focus();
                })
            })
        })
    })
    
})





taskForm.addEventListener('submit', async(e)=>{
    e.preventDefault();
    const title = taskForm['task-title'];
    const description = taskForm['task-description'];
    //console.log(title, description);
    if(editEstatus){
        await updateTask(id,{
            title: title.value,
            description: description.value
        });
        editEstatus=false;
        taskForm['btn-task-form'].innerText="Save";
        
    }else{
        await saveTask(title.value,description.value);
    }
    
    taskForm.reset();
    title.focus();
    
})
