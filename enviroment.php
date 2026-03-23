function generateVerificationToken($length = 16) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomToken = '';
    
    for ($i = 0; $i < $length; $i++) {
        $randomToken .= $characters[random_int(0, $charactersLength - 1)];
    }
    
    return $randomToken;
}

function generateExpiryTime($minutes) {
    $expiry_time = date("Y-m-d H:i:s", strtotime("+$minutes minutes"));
    return $expiry_time;
}
