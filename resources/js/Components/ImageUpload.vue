<template>
    <div class="input-image border rounded" :style="{ width : width, height: height}">
        <input :style="{ width : width, height: height}" v-if="!disabled" type="file" class="input-image-file"
               @change="handleChange" accept="image/*"/>
        <div class="input-image-preview" v-if="preview != ''"
             :style="{backgroundImage: `url(${preview})`, width : width, height: height}"/>
        <label v-if="preview == ''" class="text-muted small">{{ label.toUpperCase() }}</label>
    </div>
</template>

<script>
export default {
    emits: ["update:modelValue", 'update:url'],
    props: {
        modelValue: null,
        width: {
            type: String,
            default: '150px',
        },
        height: {
            type: String,
            default: '150px',
        },
        label: {
            type: String,
            default: 'SELECT IMAGE',
        },
        url: {
            type: String,
            default: ''
        },
        disabled: {
            type: Boolean,
            default: false
        }
    },
    computed: {
        preview: {
            set: function (val) {
                this.$emit('update:url', val)
            },
            get: function () {
                return this.url
            }
        }
    },
    methods: {
        handleChange: function (event) {
            const files = event.target.files
            if (files.length > 0) {
                this.preview = URL.createObjectURL(event.target.files[0])
                this.$emit('update:modelValue', event.target.files[0])
            }
        }
    }
};
</script>

<style lang="scss">
.input-image {
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;

    .input-image-preview {
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .input-image-file {
        opacity: 0;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        z-index: 1;
    }
}
</style>
