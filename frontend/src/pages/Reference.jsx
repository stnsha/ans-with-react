import React, { useEffect, useState } from 'react';
import axios from 'axios';
import { useAuth } from '../contexts/AuthContext';

export default function Reference() {
    const [refs, setRefs] = useState([]);
    const { setUser, csrfToken } = useAuth();

    useEffect(() => {
        const fetch = async () => {
            await csrfToken();
            try {
                const response = await axios.get('/refs');
                console.log(csrfToken()); // Add this line
                setRefs(response.data);
            } catch (error) {
                console.error('Error fetching refs:', error);
            }
        };

        fetch();
    }, []);

    return (
        <>
            <div className="text-6xl font-bold text-slate-600">References</div>
            <hr className="bg-slate-400 h-1 w-full my-4" />
            <div className="block p-10 bg-white border border-gray-200 shadow-xl rounded-lg shadowdark:border-gray-700">
                {refs}
            </div>
        </>
    );
}