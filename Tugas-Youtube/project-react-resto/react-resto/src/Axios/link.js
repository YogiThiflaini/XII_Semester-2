import axios from 'axios';


const url = "http://localhost:8000/api";
let token = "zkBG93HlR8dG0UAgl9dopjBSuqVd5oFUduGf6xb8";

export const link = axios.create({
    baseURL: url,
    headers: {
        'api_token': token
    }
});