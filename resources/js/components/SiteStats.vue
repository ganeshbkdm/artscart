<template>
    <div>
        <h2>Site Stats</h2>
        <ul>
            <li>
                <strong>Series:</strong>{{series}}
            </li>
            <li>
                <strong>Lesson:</strong>{{lesson}}
            </li>
        </ul>
    </div>
</template>

<script>
    export default {

        data(){
            return {
                series:100,
                lesson:500
            };
        }

    }
</script>
