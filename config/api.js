import axios from 'axios';

// export const api = 'https://loveny.vn/api';
export const api = 'http://localhost:2222/api';

export const axiosGet = async (url, params) => {
    const gets = await axios.get(url, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
        },
        params: params
    })
    return gets;
}

export const axiosPost = async (url, data = []) => {
    const gets = await axios.post(url, data, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
        }
    })
    return gets;
}

export const axiosPut = async (url, data = []) => {
    const response = await axios.put(url, data, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
        }
    });
    return response;
};


export const axiosPatch = async (url, data = []) => {
    const patchResponse = await axios.patch(url, data, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
        }
    });
    return patchResponse;
};


export const axiosDelete = async (url) => {
    const gets = await axios.delete(url, {
        headers: {
            Authorization: `Bearer ${localStorage.getItem('access_token')}`
        }
    })
    return gets;
}