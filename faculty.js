const app = require('express').Router();
const { Faculty } = require ('../models/users');

app.get('/', async(req, res) =>{
    return res.send(await Faculty.findAll());
});


app.post('/', async(req, res) =>{
    const { firstName, middleName, lastName, password, email,
        mobileNo, branchId, erpId, DOB} = req.body;

    const faculty = await Faculty.create({ firstName, middleName, lastName, password, email,
        mobileNo, branchId, erpId, DOB, verified: true });
    return res.send(faculty);
});


module.exports = app;
