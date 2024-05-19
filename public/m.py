import face_recognition
import sys

def find_matching_image(found_image_path, missing_image_paths):
    found_image = face_recognition.load_image_file(found_image_path)
    found_encoding = face_recognition.face_encodings(found_image)

    if len(found_encoding) == 0:
        return "None"

    matching_image = None

    for missing_image_path in missing_image_paths:
        missing_image = face_recognition.load_image_file(missing_image_path)
        missing_encodings = face_recognition.face_encodings(missing_image)

        if len(missing_encodings) == 0:
            # print(f"No face found in {missing_image_path}. Skipping.")
            continue

        match = face_recognition.compare_faces(found_encoding, missing_encodings[0])
        
        if match[0]:
            matching_image = missing_image_path
            break

    return matching_image

if __name__ == "__main__":
    if len(sys.argv) < 2:
        print("None")
        sys.exit(1)

    found_image_path = sys.argv[1]
    missing_image_paths = sys.argv[2:]

    result = find_matching_image(found_image_path, missing_image_paths)

    # Print the result
    print(result)
