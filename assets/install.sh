#!/bin/bash

echo 'Venv Installation'

VENV_PATH='.venv'

mkdir -pv ./logs/
python3 -m venv ${VENV_PATH} &&
source "${VENV_PATH}/bin/activate" &&
pip install update &&
pip install -r requirements.txt &&
pip install -r py342/requirements.txt &&
echo 'To use the software do:' &&
echo "source ${VENV_PATH}/bin/activate"
