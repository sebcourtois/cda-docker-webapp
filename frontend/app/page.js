'use client';

import {useEffect, useState} from 'react';
import styles from "./page.module.css";

export default function Page() {
    const [tasks, setTasks] = useState([]);

    useEffect(() => {
        fetch('http://localhost:9000') // API PHP
        // fetch('https://jsonplaceholder.typicode.com/todos/?userId=1')
            .then(res => res.json())
            .then(data => setTasks(data));
    }, []);

    return (
        <main>
            <h1>Liste de tâches</h1>
            <div className={styles.taskgrid}>
                {tasks.map((task) => (
                    <div key={task.id} className={styles.taskitem}>
                        <span className={styles.tasktitle}>{task.title}</span>
                        <span className={styles.taskstatus}>{task.completed ? 'Terminé' : 'À faire'}</span>
                    </div>
                ))}
            </div>
        </main>
    );
}
