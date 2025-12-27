'use strict';

class SnowModel {
    constructor() {
        this.snowflakes = [];
        this.animationId = null;
        this.isActive = false;
        this.MAX_SNOWFLAKES = 100;
    }

    createSnowflakeData() {
        return {
            id: Date.now() + Math.random(),
            x: Math.random() * window.innerWidth,
            y: -10,
            size: Math.random() * 4 + 2,
            speed: Math.random() * 2 + 1,
            opacity: Math.random() * 0.8 + 0.2,
            wobble: 0,
            wobbleSpeed: Math.random() * 0.02 + 0.01,
            wobbleAmplitude: Math.random() * 2 + 1
        };
    }

    updateSnowflake(snowflake) {
        snowflake.y += snowflake.speed;
        snowflake.wobble += snowflake.wobbleSpeed;
        snowflake.x += Math.sin(snowflake.wobble) * snowflake.wobbleAmplitude;

        // Si el copo sale de la pantalla, reiniciarlo
        if (snowflake.y > window.innerHeight) {
            snowflake.y = -10;
            snowflake.x = Math.random() * window.innerWidth;
        }

        return snowflake;
    }

    getSnowflakes() {
        return this.snowflakes;
    }

    addSnowflake() {
        if (this.snowflakes.length < this.MAX_SNOWFLAKES) {
            this.snowflakes.push(this.createSnowflakeData());
        }
    }

    removeSnowflake(id) {
        this.snowflakes = this.snowflakes.filter(flake => flake.id !== id);
    }

    clearSnowflakes() {
        this.snowflakes = [];
    }

    toggleSnow() {
        this.isActive = !this.isActive;
        return this.isActive;
    }

    getStatus() {
        return this.isActive;
    }
}

class Model extends Modelo {
	constructor(controlador, metodo) {
		super(controlador, metodo);
		}
	}
