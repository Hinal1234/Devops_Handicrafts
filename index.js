const express = require('express');
const app = express();
const sequelize = require('./utils/db');

//Routes
const faculty = require('./routes/faculty');

app.use('/faculty', faculty);

//Tables synchronization
sequelize
    // .sync({ force: true })
    // .sync({ alter: true })
    .sync()
    .then(result => {
        // console.log(result);
        // console.log(result.modelManager.models);
    })
    .catch(err => {
        if (err) {
            console.log(err);
        }
    });

const port = process.env.PORT || config.get('port');
// const port = 8080;
app.listen(port, () => console.log(`Listening on localhost:${port}`));
