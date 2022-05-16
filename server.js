// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.8.1/firebase-app.js";
import {
  getFirestore,
  collection,
  addDoc,
  getDocs,
  onSnapshot,
  deleteDoc,
  doc,
  getDoc,
  updateDoc,
} from "https://www.gstatic.com/firebasejs/9.8.1/firebase-firestore.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
  apiKey: "AIzaSyCk18IBLL7QnVThutCzTj5uWcC6ok-n6DI",
  authDomain: "crm-clients-5f93d.firebaseapp.com",
  projectId: "crm-clients-5f93d",
  storageBucket: "crm-clients-5f93d.appspot.com",
  messagingSenderId: "1029133886508",
  appId: "1:1029133886508:web:72288e4e2d41f1979c1d89",
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);

const db = getFirestore();

export const saveClient = (name, adress, phone, email, description) => {
  addDoc(collection(db, "clients"), {
    name,
    adress,
    phone,
    email,
    description,
  });
};

export const getClients = () => getDocs(collection(db, "clients"));

export const onGetClients = (callback) =>
  onSnapshot(collection(db, "clients"), callback);

export const deleteClient = (id) => deleteDoc(doc(db, "clients", id));

export const getClient = (id) => getDoc(doc(db, "clients", id));

export const updateClient = (id, newFields) =>
  updateDoc(doc(db, "clients", id), newFields);
