"use strict";

import { createData} from "./api";

window.actionLogin = (input , evt) => {
    evt.preventDefault();

    let data = {
        username: document.getElementById('username').value,
        password : document.getElementById('password').value
    }

    //beforeLoading('#saveBtn')
    createData('/api/login', data).then(res => {
        let response = res.data
        window.location.href = "/dashboard";
    }).catch(err => {
       // afterLoading('#saveBtn')
        let error = err.response.data
        if(!error.success) {
            toastr.error(error.message)
        }
    })
}