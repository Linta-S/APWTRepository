import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
// import App from './App';
import reportWebVitals from './reportWebVitals';
// import Hello from './Components/Hello';
import Home from './Component/Home';
import Profile from './Component/Profile';
import Contact from './Component/Contact';
import Foot from "./Component/Foot";
import Head from './Component/Head';
import {BrowserRouter as Router, Route, Routes} from 'react-router-dom'
 

 


const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
  <React.StrictMode>
     <Router>
      <Head/>
      <Routes>
        <Route exact path='/' element={<Home/>} />
        <Route exact path='/profile' element={<Profile/>} />
        <Route exact path='/contact' element={<Contact/>} />
 
      </Routes>
      <Foot/>
    </Router>
  </React.StrictMode>
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();