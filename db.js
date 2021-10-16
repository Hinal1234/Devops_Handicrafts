const { Sequelize } = require('sequelize');

const sequelize = new Sequelize('activity_db', 'root', '', {
    host: 'localhost',
    dialect: 'mysql',
    logging: false
  });

module.exports = sequelize;
