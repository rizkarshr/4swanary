"use strict";

import { createData} from "./api";

window.actionLogin = (input , evt) => {
    evt.preventDefault();

    let data = {
        email: getValueJquery('username'),
        password : getValueJquery('password')
    }

    beforeLoading('#saveBtn')
    createData('/api/login', data).then(res => {
        let response = res.data
        window.location.href = "/dashboard";
    }).catch(err => {
       afterLoading('#saveBtn')
        let error = err.response.data
        if(!error.success) {
            toastr.error(error.message)
        }
    })
}