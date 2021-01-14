import * as THREE from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/build/three.module.js';
import {OrbitControls} from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/examples/jsm/controls/OrbitControls.js';
import {GLTFLoader} from 'https://threejsfundamentals.org/threejs/resources/threejs/r122/examples/jsm/loaders/GLTFLoader.js';

// add scene
var scene = new THREE.Scene();
scene.background = new THREE.Color(0xdddddd);
var camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 2000);
// var camera = new THREE.PerspectiveCamera(15, ww / wh, 0.01, 1000);
camera.position.set(0, 0, 20);

// add renderer
var renderer = new THREE.WebGLRenderer();
renderer.shadowMap.enabled = true;
renderer.shadowMap.type = THREE.PCFSoftShadowMap;
renderer.setSize(window.innerWidth, window.innerHeight);
document.body.appendChild(renderer.domElement);

const crystal = new GLTFLoader();
const crystal1 = new GLTFLoader();

crystal.load('/js/models/glb/crystal.glb', function(gltf) {
    scene.add(gltf.scene);
}, undefined, function (error){
    console.error(error);
} );

crystal1.load('/js/models/glb/crystal-1.glb', function(gltf) {
    scene.add(gltf.scene);
}, undefined, function (error){
    console.error(error);
} );



// add orbit control
var controls = new OrbitControls(camera, renderer.domElement);
controls.update();

// Directional light
var directionalLight = new THREE.DirectionalLight(0xff1493, 1.0);
directionalLight.position.set(6, 1, -5);
// directionalLight.target.position.set(0, 0, 0);
// directionalLight.target = cube;
// directionalLight.castShadow = true;

scene.add(directionalLight);

const animate = function () {
    requestAnimationFrame(animate);
    renderer.render( scene, camera );
};

animate();